import React, { Component } from 'react';

class Home extends Component {
    render() {
        return (
        <>
    <div className="preloader"> <i className="fa fa-circle-o-notch fa-spin"></i></div>
      <header id="home">
  <div id="home-slider" className="carousel slide carousel-fade" data-ride="carousel">
    <div className="carousel-inner">
      <div className="item active" style={{backgroundImage: 'url(images/slider/1.jpg)'}}>
        <div className="caption">
          <h1 className="animated fadeInLeftBig">Welcome to <span>Oxygen</span></h1>
          <p className="animated fadeInRightBig">Bootstrap - Responsive Design - Retina Ready - Parallax</p>
          <a data-scroll className="btn btn-start animated fadeInUpBig" href="#services">Start now</a>
        </div>
      </div>
      <div className="item" style={{backgroundImage: 'url(images/slider/2.jpg)'}}>
        <div className="caption">
          <h1 className="animated fadeInLeftBig">Say Hello to <span>Oxygen</span></h1>
          <p className="animated fadeInRightBig">Bootstrap - Responsive Design - Retina Ready - Parallax</p>
          <a data-scroll className="btn btn-start animated fadeInUpBig" href="#services">Start now</a>
        </div>
      </div>
      <div className="item" style={{backgroundImage: 'url(images/slider/3.jpg)'}}>
        <div className="caption">
          <h1 className="animated fadeInLeftBig">We are <span>Creative</span></h1>
          <p className="animated fadeInRightBig">Bootstrap - Responsive Design - Retina Ready - Parallax</p>
          <a data-scroll className="btn btn-start animated fadeInUpBig" href="#services">Start now</a>
        </div>
      </div>
    </div>
    <a className="left-control" href="#home-slider" data-slide="prev"><i className="fa fa-angle-left" /></a>
    <a className="right-control" href="#home-slider" data-slide="next"><i className="fa fa-angle-right" /></a>
    <a id="tohash" href="#services"><i className="fa fa-angle-down" /></a>
  </div>
  <div className="main-nav">
    <div className="container">
      <div className="navbar-header">
        <button type="button" className="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span className="sr-only">Toggle navigation</span>
          <span className="icon-bar" />
          <span className="icon-bar" />
          <span className="icon-bar" />
        </button>
        <a className="navbar-brand" href="index.html">
          <h1><img className="img-responsive" src="images/logo.png"  /></h1>
        </a>                    
      </div>
      <div className="collapse navbar-collapse">
        <ul className="nav navbar-nav navbar-right">                 
          <li className="scroll active"><a href="#home">Home</a></li>
          <li className="scroll"><a href="#services">Service</a></li> 
          <li className="scroll"><a href="#about-us">About Us</a></li>                     
          <li className="scroll"><a href="#portfolio">Portfolio</a></li>
          <li className="scroll"><a href="#team">Team</a></li>
          <li className="scroll"><a href="#blog">Blog</a></li>
          <li className="scroll"><a href="#contact">Contact</a></li>       
        </ul>
      </div>
    </div>
  </div>
</header>
</>
        );
    }
}

export default Home;
