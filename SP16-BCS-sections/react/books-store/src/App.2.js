import React, { Component } from 'react';
import logo from './logo.svg';
import './App.css';

class App extends Component {
  state = {
    price:500,
    title:"BMW",
    products : ['Pen','rubber','Bunny']
  }
  render() {
    return (
      <div className="App">
        <h3>Products</h3>
        {this.state.products.map((pro,index)=><h5 key={index}>{pro}</h5>)}
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
