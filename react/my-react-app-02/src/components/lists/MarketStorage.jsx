function MarketStorage() {
  const PRODUCTS = [
    { category: "Fruits", price: "$1", stocked: true, name: "Apple" },
    { category: "Fruits", price: "$2", stocked: true, name: "Dragonfruit" },
    { category: "Fruits", price: "$3", stocked: false, name: "Passionfruit" },
    { category: "Vegetables", price: "$3", stocked: true, name: "Spinach" },
    { category: "Vegetables", price: "$2", stocked: true, name: "Pumpkin" },
    { category: "Vegetables", price: "$1", stocked: false, name: "Peas" },
  ];

  return <div>{PRODUCTS}</div>;
}

export default MarketStorage;
