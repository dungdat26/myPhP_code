import React, { Component } from 'react';

class SignUpForm extends Component {
    constructor(props){
        super(props);
        this.state = {
            ho_ten: '',
            mat_khau: '',
            mat_khau2: '',
            email: '',
            
        };
        this.handleChangeInput = this.handleChangeInput.bind(this);
    }
    handleChangeInput = (e) =>{
        console.log(e.target.value);
        this.setState({
            [e.target.name]: e.target.value
           
        })
    
    }
    // handlePasswordChange = (e) => {
    //     this.setState({
    //         [e.target.mat_khau]: e.target.value ,
    //         mat_khau2: ''
    //     });
    //   };
    // handleSubmit = () => {
    //     const { mat_khau, mat_khau2 } = this.state;
         
    //      if (mat_khau !== mat_khau2) {
    //          alert("Passwords don't match");
    //       } else {
    //            //do nothing
    //         }
    //     }
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
                <input type="text" name ="ten_dang_nhap" Value={this.state.ten_dang_nhap} onChange={this.handleChangeInput} className="form-control" id="" placeholder="ID đăng nhập" />
                </div>
            </div>

            <div className="form-group">
                <div className = "col-sm-12 ">
                <input type="password" name ="mat_khau" Value={this.state.mat_khau} onChange={this.handlePasswordChange} className="form-control" id="" placeholder="mật khẩu" />
                </div>
            </div>

            <div className="form-group">
                <div className = "col-sm-12 ">
                <input type="email" name ="email" Value={this.state.email} onChange={this.handleChangeInput} className="form-control" id="" placeholder="email" />
                </div>
            </div>

            <div className="form-group">
                <div className="col-sm-12">
            <button type="submit"  className="btn btn-primary">Đăng ký</button>
             </div>
        </div>
    </form>
        );
    }
}

export default SignUpForm;
