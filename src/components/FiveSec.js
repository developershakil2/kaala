import React, {useEffect } from 'react';
import AOS from 'aos';
import 'aos/dist/aos.css';
import Slider from './sectionPart/Slider';
import Carousel from 'react-elastic-carousel';
const Five = ()=>{
    useEffect(()=>{
            AOS.init({duration: 2000})
    },[])
    return(
        <>
          <section id="five">
          <div id="third_container carousel" className="container m-auto row">
          <Carousel>
          <item id="item">
            <div className="card1 ">  <Slider/></div>
          </item>
           
          <item id="item">
            <div className="card2 ">  <Slider/></div>
          </item>
            
            
          <item id="item">
            <div className="card3 ">  <Slider/></div>
          </item>
           
          <item id="item">
            <div className="card4 ">  <Slider/></div>
          </item>
           
          <item id="item">
            <div className="card5 ">  <Slider/></div>
          </item>
             </Carousel>
          

          </div>
             
             
        </section>
        
        </>
    )
}
export default Five;