import Axios from "axios";
import React, { useState } from "react";
import ReactDOM from "react-dom";
import { renderToString } from "react-dom/server";
import { PDFtest } from "./PDFtest";

function WithReact() {
  const [isPost, setIsPost] = useState(false);

  const onClickButton = async data => {
    try {
      const response = await Axios.post(
        "http://127.0.0.1:8000/test_send",
        renderToString(<PDFtest />),
        {
          headers: {
            "Content-Type": "text/plain"
          }
        }
      );
      setIsPost(response.config.data);
    } catch (error) {
      console.error(error);
    }
  };

  return (
    <>
      <form method="get" action="/test">
        <input type="submit" name="hello" value="Post Data" />
      </form>
      <form>
        <input type="submit" value="Send Mail" onClick={onClickButton} />
      </form>
      {isPost ? "sent!" : "not sent yet"}
    </>
  );
}

export default WithReact;

if (document.getElementById("with-react")) {
  ReactDOM.render(<WithReact />, document.getElementById("with-react"));
}
