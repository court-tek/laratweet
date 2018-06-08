import React, { Component } from "react";

class UserBanner extends Component {
  constructor() {
    super();
    this.state = {
      name: "Courtnez"
    };
  }
  render() {
    return (
      <section id="top-area">
        <div className="profile-imfo">
          <div className="user-img">
            user image goes here!
            <img src="" />
          </div>

          <div className="user-details">
            <h3>So and So</h3>
            <a href="#">Update info</a>
            <a href="#">View Activity</a>
          </div>
        </div>
      </section>
    );
  }
}

export default UserBanner;
