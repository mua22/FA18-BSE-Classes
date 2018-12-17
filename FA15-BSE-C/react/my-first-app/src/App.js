import React, { Component } from "react";
import "./App.css";
import Products from "./Products/Products";
import Cart from "./Cart/Cart";

class App extends Component {
  state = {
    cartProducts: [{ title: "BMW", price: 200 }, { title: "Audi", price: 300 }],
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
      }
    ],
    title: "We are selling cars and bikes",
    price: 4000
  };
  render() {
    return (
      <div className="App container">
        <h1>This is our store</h1>
        <div className="row">
          <div className="col-sm-6">
            <Products products={this.state.products} 
            onProductAddToCart = {this.onProductAddToCart}
            />
          </div>
          <div className="col-sm-6">
            <Cart products={this.state.cartProducts}/>
          </div>
        </div>
      </div>
    );
  }
  onProductAddToCart = (title,price) => {
    const cs = Array.from(this.state.cartProducts);
    cs.push({
      title:title,
      price:price
    });
    this.setState ({cartProducts:cs});
  }
}

export default App;
