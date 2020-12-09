import React, { Component } from 'react';



class ItemGioHang extends Component {
    constructor(props){
        super(props);
    }

    handleButtonClick(string_loai){
        if(string_loai == '-'){
            if(this.props.info_item.so_luong - 1  >0){
                this.props.handle_process(this.props.info_item.id, this.props.info_item.so_luong - 1 );
            }
            else{
                this.props.handle_process(this.props.info_item.id, 1);
                var key = window.confirm('Bạn có muốn xoá sản phẩm' + this.props.info_item.title + 'khỏi giỏ hàng')
                console.log(key);
                if(key== true){
                    this.props.handle_remove_item(this.props.info_item.id);
                }
            }
    
        }
        else{
            this.props.handle_process(this.props.info_item.id, this.props.info_item.so_luong + 1 );
        }
    }
        handleButtonRemoveItemCart(){
            var key = window.confirm('Bạn có muốn xoá sản phẩm' + this.props.info_item.title + 'khỏi giỏ hàng')

            if(key == true){
                this.props.handle_remove_item(this.props.info_item.id);

            }
        }
    
    render() {
        return (
            <>
            {
                (this.props.info_item)?
                <tr>
                    <td>{this.props.info_item.id}</td>
                    <td>{this.props.info_item.title }</td>
                    <td className='include_action_gio_hang'>
                        <button type="button" class="btn btn-default" onClick={()=>{this.handleButtonClick('-')}}>-</button>
                        
                        <input type="number" name="" readOnly="true" id="input" class="form-control_number_input" value={this.props.info_item.so_luong} />
                        
                        <button type="button" class="btn btn-default" onClick={()=>{this.handleButtonClick('+')}}>+</button>
                    </td>
                    <td>{this.props.info_item.price}</td>
                    <td>{this.props.info_item.price * this.props.info_item.so_luong} </td>
                    <td>
                    
                        <button type="button" class="btn btn-large btn-block btn-danger" onClick={()=>{this.handleButtonRemoveItemCart('+')}}>
                            <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                        </button>
                        
                    </td>
                </tr>
                :
                <></>
            }
            </>
        );
    }
}

export default ItemGioHang;
