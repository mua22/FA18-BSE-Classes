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

        <span 
        className={(this.state.price>100)? "red":"blue"}>
        
        {this.state.price}</span>
        {
          (this.state.price>100) && <div>You are purchasing an awesome book</div>
        }
        
      </div>
    );
  }

  onChangePrice =(e)=>{
    
    this.setState({price:e.target.value});
  }

}

export default App;
