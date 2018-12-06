import React, { Component } from "react";
import logo from "./logo.svg";
import "./App.css";

class App extends Component {
  state = {
    price: 500,
    spanClass: "red",
    books: ["JS", "OS", "Automata"],
    newBook : ""
  };
  
  render() {
    return (
      <div>
        <h3>Book Store</h3>
        <input type="text" value={this.state.newBook}
        
        onChange={this.onNewBookChange}
        />
        <button onClick={this.onAddBook}>Add Book</button>
        <ul>
          {this.state.books.map((book,index) => 
            <li key={index}>{book}</li>
          )}
        </ul>
        <hr />

        <p>Your boook price is {this.state.price}</p>
        <input type="text" onChange={this.onChangePrice} />

        <span className={this.state.price > 100 ? "red" : "blue"}>
          {this.state.price}
        </span>
        {this.state.price > 100 && (
          <div>You are purchasing an awesome book</div>
        )}
      </div>
    );
  }
  onNewBookChange  = e=>{
    this.setState({newBook:e.target.value});
  }
  onChangePrice = e => {
    this.setState({ price: e.target.value });
  }
  onAddBook = () =>{
    const bs = this.state.books;
    bs.push(this.state.newBook);
    this.setState({books:bs});
  }
}

export default App;
