import React, {Component} from 'react';
import PropTypes from 'prop-types';

class Cart extends Component {
  constructor(props){
    super(props);
  }
  render(){
    return (
      <div className="Cart">
      <table className="table">
      <thead><tr><th>Title</th><th>Price</th></tr></thead>
      <tbody>
        {this.props.products.map((p,index)=>
          <tr key={index}><td>{p.title}</td><td>{p.price}</td></tr>
          )}
          </tbody>
      </table>
      </div>
    )
  }
}
Cart.propTypes = {
}

export default Cart;