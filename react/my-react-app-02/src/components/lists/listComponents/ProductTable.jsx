import ProductCategoryRow from "./ProductCategoryRow";
import ProductRow from "./ProductRow";

export default function ProductTable() {
  return (
    <table>
      <thead>
        <tr>
          <th>Name</th>
          <th>Price</th>
        </tr>
      </thead>
      <ProductCategoryRow category={"Fruits"} />
      <tbody>
        <ProductRow product={{ name: "Apple", price: "$1" }} />
      </tbody>
    </table>
  );
}
