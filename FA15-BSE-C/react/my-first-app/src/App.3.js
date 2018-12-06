import React, { Component } from 'react';
import logo from './logo.svg';
import './App.css';

class App extends Component {
  state = {
      products: ["BMW","ALTO","MERCEDEZ","Suzukiu"],
      title: "We are selling cars and bikes",
      price:4000 
  }
  render() {

    return (
      <div className="App">
        <h1>{this.state.title}</h1>
        
        <ul>
            {this.state.products.map((p,index)=>
              <li key={index}>{p}</li>
            )}
        </ul>
        </div>
    );
  }
  onTitleChange = (e) =>{
    const t = e.target.value;
    this.setState({price:t});
  }
}

export default App;
