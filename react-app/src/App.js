import { useEffect, useState } from "react";
import "./App.css";
import * as api from "./service";
import Edit from "./components/edit";
import Delete from "./components/delete";

function App() {
  const [isGetList, setIsGetList] = useState(true);
  const [getList, setGetList] = useState([]);
  const [selectedRow, setSelectedRow] = useState({});
  const [name, setName] = useState("");
  const [phone, setPhone] = useState("");

  useEffect(() => {
    if (isGetList) {
      new Promise(function (resolve) {
        resolve(api.get("/contacts"));
      }).then((r) => {
        setGetList(r);
        setIsGetList(false);
        setName("");
        setPhone("");
      });
    }
  }, [isGetList]);


  const onClickSave = async (e) => {
    e.preventDefault();
    await api.post("/contact/new", { name, phone });
    setIsGetList(true);
  };

  const onClickRow = (v) => {
    setSelectedRow(v);
  };

  return (
    <form>
      <div className="App">
        <input
          onChange={(e) => setName(e.target.value)}
          value={name}
          placeholder="İsminizi giriniz..."
        />
        <input
          onChange={(e) => setPhone(e.target.value)}
          value={phone}
          placeholder="Telefonunuzu giriniz..."/>

        <button
          style={{ backgroundColor: "#f8f9fa", color: "#d63384" }}
          onClick={(e) => onClickSave(e)}> SAVE
        </button>

        <table className={"table table-striped table-hover"}>
          <thead>
            <tr>
              <th> ID </th>
              <th> NAME </th>
              <th> PHONE </th>
            </tr>
          </thead>

          <tbody>
            {getList.map((v, i) => {
              if (v === selectedRow) {
                return (
                    <Edit row={v} key={i} list={(e) => setIsGetList(e)} />
                );
              } 
              else {
                return (
                  <tr onDoubleClick={() => onClickRow(v)}>
                    <td>{v.id}</td>
                    <td>{v.name}</td>
                    <td>{v.phone}</td>
                    <Delete row={v} key={i} list={(e) => setIsGetList(e)} />
                  </tr>
                );}})}
          </tbody>
        </table>
      </div>
    </form>
  );
}

export default App;
