import React, { Component } from 'react';
import logo from './logo.svg';
import './App.css';
import Products from './components/Products/Products';
import { Provider } from "react-redux";
class App extends Component {
  state = {
    price:500,
    title:"BMW",
    products : ['Pen','rubber','Bunny']
  }
  render() {
    return (
      <div className="App">
        <h3>Products Store Example</h3>
        <Provider store={window.store}>  
        <Products />

        </Provider>

        
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
