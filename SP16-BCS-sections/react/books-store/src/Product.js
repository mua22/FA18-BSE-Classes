import React, { Component } from 'react';
import logo from './logo.svg';
import './App.css';
class Product extends Component {
  constructor(props){
    super(props);
    console.log(props);
  }
  state = {    
  }
  render() {
    return (
      <div className="product">
      <h3>{this.props.title}</h3>
      <span>{this.props.price}</span>
      </div>
    );
  }  
}

export default Product;
