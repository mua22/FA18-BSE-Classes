import React, { Component } from 'react';
import logo from './logo.svg';
import './App.css';

class App extends Component {
  state = {
    price:500,
    spanClass: "red"
  }
  render() {
    return (
      <div>
        <h3>Book Store</h3>
        <p>Your boook price is {this.state.price}</p>
        <input type="text" onChange={this.onChangePrice}/>

        <span className={this.state.spanClass}>{this.state.price}</span>
      </div>
    );
  }

  onChangePrice =(e)=>{
    if(e.target.value >100)    
    this.setState({spanClass:"red"});
    else
    this.setState({spanClass:"blue"});
    this.setState({price:e.target.value});
  }

}

export default App;
