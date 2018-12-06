import React, { Component } from 'react';
import logo from './logo.svg';
import './App.css';

class App extends Component {
  state = {
      products: ["BMW","ALTO","MERCEDEZ"],
      title: "We are selling cars and bikes",
      price:4000 
  }
  render() {

    return (
      <div className="App">
        <h1>{this.state.title}</h1>
        <input type="text" onChange={this.onTitleChange}/>
        <div className={(this.state.price<500)? "red": "blue"} >{this.state.price}</div>
        </div>
    );
  }
  onTitleChange = (e) =>{
    const t = e.target.value;
    this.setState({price:t});
  }
}

export default App;
