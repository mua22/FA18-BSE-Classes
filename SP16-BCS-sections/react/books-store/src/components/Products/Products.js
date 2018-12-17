import React, {Component} from 'react';
import PropTypes from 'prop-types';
import { connect } from "react-redux";

class Products extends Component {
  state = {}
  constructor(props){
    super(props);
    console.log(window.store);
  }
  render(){
    return (
      <div className="Products">
      <h4>Show All Products</h4>
      </div>
    )
  }
}
Products.propTypes = {
}
const mapStateToProps = state => {
  return state;
};
export default connect(mapStateToProps)(Products);