import React, { useState } from 'react';
import ProductList from '../Product/ProductList';

const Content = () => {

    const [list_item, SetListItem] = useState([
      {
        'id': 1,
        'type': "Action Games",
        'title': "Sản phẩm 1",
        'image': "images/t1.jpg",
        'price': 800000
        },
        {
        'id': 2,
        'type': "Racing Games",
        'title': "Sản phẩm 2",
        'image': "images/t3.jpg",
        'price': 950000
        },
        {
        'id': 3,
        'type': "3D Games",
        'title': "Sản phẩm 3",
        'image': "images/t4.jpg",
        'price': 850000
        },
        {
        'id': 4,
        'type': "Arcade Games",
        'title': "Sản phẩm 4",
        'image': "images/t2.jpg",
        'price': 1200000
        }
    ]);

    return (
        <div className="content">
        <div className="container">
          <div className="top-games">
            <h3>Top Games</h3>
            <span></span>
          </div>
          <div className="top-game-grids">
            
            <ProductList list_item={list_item} />
            
          </div>
        </div>
      </div>
    );
};

export default Content;