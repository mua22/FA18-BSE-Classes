import React, {Component} from 'react';
import PropTypes from 'prop-types';
import Product from '../Product/Product';
class Products extends Component {
  constructor(props){
    super(props);
    console.log(props);
  }
  render(){
    return (
      <div className="Products">
        <h4>All Products</h4>
        {this.props.products.map((p,index)=>
          <Product 
          title={p.title} 
          price={p.price} 
          key={index}
          onAddToCart = {this.productAddedtoCart}
          />
          )}
      </div>
    )
  }
  productAddedtoCart = (title,price)=>{
    console.log(this.props);
    this.props.onProductAddToCart(title,price);
  }
}
Products.propTypes = {
}

export default Products;