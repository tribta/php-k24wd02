import Button from "./components/Button";

export default function App() {
  const myName = null;
  return (
    <div style={{ backgroundColor: "red" }}>
      <div>{myName ? "tôi tên " + myName : "Hello SomeOne"}</div>
      <Button />
    </div>
  );
}
