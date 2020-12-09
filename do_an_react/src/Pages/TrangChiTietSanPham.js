import React, { Component } from 'react';
import Poster from '../module/Poster/Poster';
import Xbox from '../module/Xbox/Xbox';

import { withRouter } from "react-router";

class TrangChiTietSanPham extends Component {

    constructor(props){
        super(props);
        this.state = {
            list_item: [
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
            ],
            item_current: {}
        };
    }

    componentDidMount(){
        let id_san_pham = this.props.match.params.id_san_pham;
        //console.log(id_san_pham);

        this.state.list_item.forEach((item) => {
            if(item.id == id_san_pham){
                this.setState({
                    item_current: item
                }, () => {
                    //console.log(this.state.item_current)
                })
            }
        })
    }

    render() {
        return (
            <>
               <Poster />
              
                <Xbox item_current={this.state.item_current} />
            </>
        );
    }
}

export default withRouter(TrangChiTietSanPham);