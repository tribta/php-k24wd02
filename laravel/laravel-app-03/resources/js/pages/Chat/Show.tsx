// @ts-nocheck
import ChatLayout from '@/components/chat/ChatLayout';
import ConversationList from '@/components/chat/ConversationList';
import MessageInput from '@/components/chat/MessageInput';
import MessageList from '@/components/chat/MessageList';
import AppLayout from '@/layouts/app-layout';
import { useEffect, useState } from 'react';

export default function Show({ conversation, messages, conversations = [] }) {
    const [items, setItems] = useState(messages.data);

    useEffect(() => {
        setItems(messages.data);
    }, [conversation.id]);

    useEffect(() => {
        const echo = (window as any).Echo;
        const channelName = `conversation.${conversation.id}`;
        const privateName = `private-${channelName}`;

        const ch = echo.private(channelName);

        const handler = (e) => {
            setItems((p: []) => [...p, e.message]);
        };

        ch.listen('.MessageCreated', handler);
        return () => {
            ch.stopListening('.MessageCreated');
            echo.leave(privateName);
        };
    }, [conversation.id]);

    return (
        <AppLayout>
            <ChatLayout sidebar={<ConversationList conversations={conversations} />}>
                <div style={{ display: 'flex', flexDirection: 'column', height: '100%' }}>
                    <div style={{ padding: '10px 16px', borderBottom: '1px solid #eee', background: '#fff' }}>
                        <strong>{conversation.name || (conversation.is_direct ? 'Direct message' : `Group #${conversation.id}`)}</strong>
                    </div>
                    <MessageList messages={{ data: items }} />
                    <MessageInput key={conversation.id} conversationId={conversation.id} />
                </div>
            </ChatLayout>
        </AppLayout>
    );
}
