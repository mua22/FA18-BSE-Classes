import React, {Component} from 'react';
import PropTypes from 'prop-types';

class Product extends Component {
  constructor(props){
    super(props);
    //console.log(props);
  }
  render(){
    return (
      <div className="Product">
        <h5>{this.props.title}</h5>
        <h5>Price: {this.props.price} USD</h5>
        <button onClick={this.addToCartClicked}>Add to Cart</button>
      </div>
    )
  }
  addToCartClicked = () => {
    this.props.onAddToCart(this.props.title,this.props.price);
    //console.log(this.props.title + "Clicked ");
  }
}
Product.propTypes = {
}

export default Product;