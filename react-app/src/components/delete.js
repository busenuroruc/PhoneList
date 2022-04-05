import axios from "axios";

export default function Delete(props) {
  const { row, list } = props;

  const onClickDelete = async (e) => {
    e.preventDefault();
    await axios
      .delete("contact/delete/" + row.id)
      list(true);
  };

  return (
    <tr>
      <td>
        <button
          onClick={onClickDelete}
          style={{ backgroundColor: "#f8f9fa", color: "#d63384" }} >
          DELETE
        </button>
      </td>
    </tr>
  );
}
