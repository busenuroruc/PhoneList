// import { useState, useEffect } from "react";
// import * as api from "../service";


// export default function List(props){
// const {row} = props;
// const [isGetList, setIsGetList] = useState(true);
// const [getList, setGetList] = useState([]);
// const [selectedRow, setSelectedRow] = useState({});
// const [name, setName] = useState("");
// const [phone, setPhone] = useState("");

// useEffect(() => {
//   if (isGetList) {
//     new Promise(function (resolve) {
//       resolve(api.get("/contacts"));
//     }).then((r) => {
//       setGetList(r);
//       setIsGetList(false);
//       setName("");
//       setPhone("");
//     });
//   }
// }, [isGetList]);

// const onClickSave = async (e) => {
//   e.preventDefault();
//   await api.post("/contact/new", { name, phone });
//   setIsGetList(true);
// };

// const onClickRow = (v) => {
//   setSelectedRow(v);
// };
//  return (
//    <form>
//      <div className="App">
//        <input
//          onChange={(e) => setName(e.target.value)}
//          value={name}
//          placeholder="İsminizi giriniz..."
//        />
//        <input
//          onChange={(e) => setPhone(e.target.value)}
//          value={phone}
//          placeholder="Telefonunuzu giriniz..."
//        />
//        <button
//          style={{ backgroundColor: "lightgreen", color: "#08310c" }}
//          onClick={(e) => onClickSave(e)}
//        >
//          SAVE
//        </button>

//        <table className={"table table-striped table-hover"}>
//          <thead>
//            <tr>
//              <th></th>
//              <th> NAME </th>
//              <th> PHONE </th>
//              <th></th>
//            </tr>
//          </thead>

//          {/* <tbody>
//            {getList.map((v, i) => {
//              if (v === selectedRow) {
//                return (
//                  <tr key={i}>
//                    <td></td> <Edit row={v} list={(e) => setIsGetList(e)} />
//                    <td></td> <Delete row={v} list={(e) => setIsGetList(e)} />
//                  </tr>
//                );
//              } else {
//                return (
//                  <tr onClick={() => onClickRow(v)} key={i}>
//                    <td>{v.id}</td>
//                    <td>{v.name}</td>
//                    <td>{v.phone}</td>
//                    <td></td>
//                  </tr>
//                );
//              }
//            })}
//          </tbody> */}
//        </table>
//      </div>
//    </form>
//  );

// }