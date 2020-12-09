
import './App.css';
import { useState } from 'react';
import{Link,
  Route,
  BrowserRouter as Router,
  Switch
 } from "react-router-dom";

import ReactDOM from 'react-dom';
import Topbanner from './module/Topbanner/Topbanner';
import Trangchu from './Pages/Trangchu';
import ButtonGoToGioHang from'./module/ButtonGoToGioHang';



import Footer from './module/Footer/Footer';


import SignUp from './module/Signup/SignUp';

import TrangLienHe from './Pages/TrangLienHe';

import TrangChiTietSanPham from './Pages/TrangChiTietSanPham';

import TrangThanhToan from './Pages/TrangThanhToan';
import TrangGioHang from './Pages/TrangGioHang';
import Poster from './module/Poster/Poster';






function App() {
    let abc ="chào các bạn";
    
    const[load_top_banner, SetLoadTopBanner] = useState(true);
      const handleUnMountTopBanner = () =>{
        SetLoadTopBanner(false);
      }
  return (
    <>
    <Router>
    {
      (load_top_banner)?
    <Topbanner title_page={"Dat " + "Store " + Math.round(Math.random() * 100)} delete_me={handleUnMountTopBanner}/>
    :
    null
    }

    
      <Switch>

      <Route path='/chi-tiet/:id_san_pham'>
      <TrangChiTietSanPham />
    </Route>

    <Route path='/chi-tiet'>
     <Poster />
    </Route>



    <Route path='/thanh-toan'>
      <TrangThanhToan />
    </Route>

    
    <Route path='/dang-ky'>
      <SignUp />
    </Route>

    
    <Route path='/lien-he'>
      <TrangLienHe />
      </Route>

      <Route path='/gio-hang'>
        <TrangGioHang />
        
      </Route>

      <Route path='/'>
    	  <Trangchu />
      </Route>

    </Switch>
    
    <ButtonGoToGioHang />
      <Footer />

    </Router>
    
   </>
  );
}

export default App;