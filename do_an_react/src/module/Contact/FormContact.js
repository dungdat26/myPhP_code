import React, { Component } from 'react';

class FormContact extends Component {
    constructor(props){
        super(props);
        this.state = {
            ho_ten: '',
            dia_chi: '',
            so_dien_thoai: '',
            email: '',
            noi_dung: '',
        };
        this.handleChangeInput = this.handleChangeInput.bind(this);
    }
    handleChangeInput = (e) =>{
        console.log(e.target.value);
        this.setState({
            [e.target.name]: e.target.value
        })
    }
    render() {
        return (
                    <form className="form-horizontal">

                        <div className="form-group">
                            <div className = "col-sm-12 ">
                            <input type="text" name ="ho_ten" Value={this.state.ho_ten} onChange={this.handleChangeInput} className="form-control" id="" placeholder="họ và tên" />
                            </div>
                        </div>

                        <div className="form-group">
                            <div className = "col-sm-12 ">
                            <input type="text" name ="dia_chi" Value={this.state.dia_chi} onChange={this.handleChangeInput} className="form-control" id="" placeholder="địa chỉ" />
                            </div>
                        </div>

                        <div className="form-group">
                            <div className = "col-sm-12 ">
                            <input type="number" name ="so_dien_thoai" Value={this.state.so_dien_thoai} onChange={this.handleChangeInput}  className="form-control" id="" placeholder="Số điện thoại" />
                            </div>
                        </div>

                        <div className="form-group">
                            <div className = "col-sm-12 ">
                            <input type="email" name ="email" Value={this.state.email} onChange={this.handleChangeInput} className="form-control" id="" placeholder="email" />
                            </div>
                        </div>

                        <div className="form-group">
                            <div className = "col-sm-12 ">
                            <textarea type="text" name ="noi_dung" Value={this.state.noi_dung} onChange={this.handleChangeInput} className="form-control" id="" placeholder="thắc mắc hoặc yêu cầu của bạn" />
                            </div>
                        </div>
                    
                        <div className="form-group">
                            <div className="col-sm-12">
                        <button type="submit" className="btn btn-primary">Gửi thông tin liên hệ</button>
                         </div>
                    </div>
                </form>
        );
    }
}

export default FormContact;
