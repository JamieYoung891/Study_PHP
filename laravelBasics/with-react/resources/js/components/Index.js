import React from "react";
import ReactDOM from "react-dom";

function WithReact() {
  return (
    <>
      <form method="get" action="/test">
        <input type="submit" name="hello" value="Post Data" />
      </form>
    </>
  );
}

export default WithReact;

if (document.getElementById("with-react")) {
  ReactDOM.render(<WithReact />, document.getElementById("with-react"));
}
