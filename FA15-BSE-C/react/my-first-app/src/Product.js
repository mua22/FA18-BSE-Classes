import React, { Component } from 'react';
class Product extends Component {
  state = {
      showDetails: this.props.showDetails
  }
  constructor(props){
    super(props);
    console.log(props);
  }
  render() {
    return (
      <div className="Product">
        <h3>{this.props.title}</h3>
        <div className={(this.props.price>550)?"red":"blue"}>{this.props.price}</div>
        <button onClick={this.onDetailsClick}>
          {this.state.showDetails? "Hide":"Show"}
        </button>
      {this.state.showDetails && <div>{this.props.details}</div> }
        </div>
    );
  }
  onDetailsClick = ()=> {
    this.setState({showDetails: !this.state.showDetails});
  }
 
}

export default Product;
