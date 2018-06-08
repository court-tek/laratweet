import React, { Component } from "react";
import ReactDOM from "react-dom";

import UserBanner from "./UserBanner";
import Posts from "./Posts";

class App extends Component {
  constructor() {
    super();
    this.state = {
      name: "Courtnez"
    };
  }
  render() {
    return (
      <div>
        <UserBanner />
        <section id="content-area">
          <Posts />
        </section>
      </div>
    );
  }
}

if (document.getElementById("root")) {
  ReactDOM.render(<App />, document.getElementById("root"));
}
