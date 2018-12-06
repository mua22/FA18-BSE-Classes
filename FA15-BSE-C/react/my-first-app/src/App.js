import React, { Component } from "react";
import logo from "./logo.svg";
import "./App.css";
import Product from "./Product";
class App extends Component {
  state = {
    products: [
      {
        title: "BMW",
        price: 800,
        details: "Hello BMW"
      },
      {
        title: "AUDI",
        price: 8000,
        details: "Hello Audi"
      },
      {
        title: "ALTO",
        price: 0,
        details: "Hello ALTO"
      },
    ],
    title: "We are selling cars and bikes",
    price: 4000
  };
  render() {
    return (
      <div className="App">
      <Product  
        title="Usman" price={900}
         details="Hello" 
         showDetails = {false}
        />
        {this.state.products.map((product,index)=>
        <Product key={index} 
        title={product.title} price={product.price}
         details={product.details} 
         showDetails = {true}
        />
        )}
      </div>
    );
  }
}

export default App;
