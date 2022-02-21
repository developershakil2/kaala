import React, {useEffect } from 'react';
import AOS from 'aos';
import 'aos/dist/aos.css';
import Slider from './sectionPart/Slider';
import Slider2 from './sectionPart/Slider2';
import Slider3 from './sectionPart/Slider3';
import Carousel from 'react-elastic-carousel';
const Five = ()=>{
    useEffect(()=>{
            AOS.init({duration: 2000})
    },[])
    return(
        <>
          <section id="five">
            <h2 style={{color:'#dc07e0', fontSize:"35px" , position:'relative', textAlign:'center'}}>Concepts</h2>
          <div id="third_container carousel" className="container m-auto row">
          <Carousel>
          <item id="item">
            <div className="card1 ">  <Slider/></div>
          </item>
           
          <item id="item">
            <div className="card2 ">  <Slider2/></div>
          </item>
            
            
          <item id="item">
            <div className="card3 ">  <Slider3/></div>
          </item>
          
           
        
             </Carousel>
          

          </div>
             
             
        </section>
        
        </>
    )
}
export default Five;