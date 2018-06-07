import React, { Component } from "react";
import axios from "axios";

class App extends Component {

  constructor(props) {
    super(props)
    this.state = {
      body: ''
    }
    // bind
    this.handleSubmit = this.handleSubmit.bind(this);
    this.handleChange = this.handleChange.bind(this);
  }

  handleSubmit(e) {
    e.preventDefault();
    // this.postData();
    axios.post('/posts', {
        body: this.state.body
    }).then(response => console.log(response))
  }

  postData() {
    axios.post('/posts', {
      body: this.state.body
    });
  }

  handleChange(e) {
    this.setState({
      body: e.target.value
    })
  }
  render() {
    return (
      <div className="container">
        <div className="row justify-content-center">
          <div className="col-md-6">
            <div className="card">
              <div className="card-header">Tweet something...</div>

              <div className="card-body">
                <form onSubmit={this.handleSubmit}>
                <div className="form-group">
                  <textarea
                    onChange={this.handleChange}
                    className="form-control"
                    rows="5"
                    maxLength="140"
                    placeholder="Whats up?"
                  />
                </div>
                  <input type="submit" value="Post" className="form-control" />
                </form>
              </div>
            </div>
          </div>

          <div className="col-md-6">
            <div className="card">
              <div className="card-header">App Component</div>

              <div className="card-body">
                I'm representing the App component!
              </div>
            </div>
          </div>
        </div>
      </div>
    );
  }
}

export default App;
