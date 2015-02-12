﻿using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Mvc;

namespace BBBoss.Controllers
{
    public class HomeController : Controller
    {
        public string brand;
        public string model;
        public string carrier;
        public int size;
        public string condition;




        public ActionResult Index()
        {
            ViewBag.Message = "Select Your iPhone Model to Get Started";

            return View();
        }

        public ActionResult About()
        {
            ViewBag.Message = "Your app description page.";

            return View();
        }

        public ActionResult Contact()
        {
            ViewBag.Message = "Your contact page.";

            return View();
        }

        
    }
}
