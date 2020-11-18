
import './App.css';
import ReactDOM from 'react-dom';
import Topbanner from './module/Topbanner/Topbanner';
import Slider from './module/Slider/Slider';
import Content from './module/Content/Content';
import Lastest from './module/Lastest/Lastest';
import Poster from './module/Poster/Poster';
import Xbox from './module/Xbox/Xbox';
import Footer from './module/Footer/Footer';
import { useState } from 'react';

function App() {
    let abc ="chào các bạn";
    
    const[load_top_banner, SetLoadTopBanner] = useState(true);
      const handleUnMountTopBanner = () =>{
        SetLoadTopBanner(false);
      }
  return (
    <>
    {
      (load_top_banner)?
    <Topbanner title_page={"Dat " + "Store " + Math.round(Math.random() * 100)} delete_me={handleUnMountTopBanner}/>
    :
    null
    }
   	<Slider />
    <Content />
	  <Lastest/>
	  <Poster/>
    <Xbox />
    <Footer />
   </>
  );
}

export default App;