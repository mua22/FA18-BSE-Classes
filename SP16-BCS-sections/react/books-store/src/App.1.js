import React, { Component } from 'react';
import logo from './logo.svg';
import './App.css';

class App extends Component {
  state = {
    price:500,
    title:"BMW"
  }
  render() {
    return (
      <div className="App">
        <h3>Products</h3>
        <h4 className={(this.state.price>500)? "green":"red"}>{this.state.title}</h4>
        <h4>{this.state.price}</h4>
        <input type="text" onChange={this.onChange}/>
        <h4 className={this.priceStyle()}>{this.state.price}</h4>
      </div>
    );
  }
  onChange = (e) =>{
    const p = e.target.value;
    this.setState({price:p});
  }
  priceStyle = () =>{
    if(this.state.price>500)
    return "green";
    else return "red";
  }
}

export default App;
