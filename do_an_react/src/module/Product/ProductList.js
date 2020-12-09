import React from 'react';
import ProductItem from './ProductItem';
import Carousel from 'react-elastic-carousel';

const ProductList = (props) => {
    return (
        <Carousel>  
            {
                props.list_item.map(item_info => 
                <ProductItem  item_info={item_info} />
                )
            }
        </Carousel> 
    );
};

export default ProductList;