import ChatLayout from '@/components/chat/ChatLayout';
import ConversationList from '@/components/chat/ConversationList';
import NewConversation from '@/components/chat/NewConversation';
import AppLayout from '@/layouts/app-layout';

export default function Index({ conversations, users }) {
    return (
        <AppLayout>
            <ChatLayout
                sidebar={
                    <>
                        <NewConversation users={users} />
                        <ConversationList conversations={conversations} />
                    </>
                }
            >
                Create new Conversation on Left sidebar.
            </ChatLayout>
        </AppLayout>
    );
}
