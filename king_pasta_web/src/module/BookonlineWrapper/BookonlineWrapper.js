import React, { Component } from 'react';

class BookonlineWrapper extends Component {
    constructor(props){
        super(props);
        this.state = {
            name: '',
            email: '',
            from: '',
            to: '',
            persons: '',
            
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

            <div className="bookonlinewrapper">
            <div className="container" id="bookonline">
            <h3 className="wow fadeInUp" data-wow-delay="0.3s"> BOOK ONLINE</h3>
            <form >
            <input type="text" name="name" Value={this.state.name} onChange={this.handleChangeInput} className="name wow zoomIn" placeholder="Your Name" />
            <input type="email" name="email" Value={this.state.email} onChange={this.handleChangeInput} className="email wow zoomIn" placeholder="Your E-MAIL"/>
            <input type="number" name="from" Value={this.state.from} onChange={this.handleChangeInput} className="from wow zoomIn" placeholder="09-06-2014"/>
            <input type="number" name="to" Value={this.state.to} onChange={this.handleChangeInput} className="to wow zoomIn" placeholder="09-06-2014"/>
            <input type="number" name="persons" Value={this.state.persons} onChange={this.handleChangeInput} className="persons wow zoomIn" min="0" placeholder="Number of persons"/>
            
          
            
            <button type="submit" className="booknow wow fadeInUp"> BOOK NOW </button>
            
            </form>
            
            
            </div>
        </div>
        );
    }
}


export default BookonlineWrapper;
