import {useState} from "react";
import axios from "axios";

export default function Edit(props){
    const {row, index, list} = props;

    const [name, setName] = useState(row.name);
    const [phone, setPhone] = useState(row.phone);

    const onClickUpdate = async (e) => {
        e.preventDefault();
        await axios.post('/contact/update/' + row.id, {name, phone});
        list(true);
    }

    return (
      <tr key={index}>
        <td>{row.id}</td>
        <td>
          <input
            onChange={(e) => setName(e.target.value)}
            value={name}
            type="text"
          />
        </td>
        <td>
          <input
            onChange={(e) => setPhone(e.target.value)}
            value={phone}
            type="text"
          />
        </td>
        <td>
          <button
            onClick={onClickUpdate}
            style={{ backgroundColor: "#f8f9fa", color: "#d63384" }}> EDIT
          </button>
        </td>
      </tr>
    );
}