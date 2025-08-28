// @ts-nocheck

export default function MessageInput({ conversationId }) {
    return (
        <form className="mi-form" onSubmit={submit} autoComplete="off">
            <input
                ref={inputRef}
                className="mi-input"
                name="body"
                value={data.body}
                onChange={(e) => setData('body', e.target.value)}
                placeholder="Type a message…"
                autoComplete="new-password"
            />
            <button className="mi-send" type="submit" disabled={processing}>
                Send
            </button>
        </form>
    );
}
