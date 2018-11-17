using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace WindowsFormsApp2
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        private void home_Click(object sender, EventArgs e)
        {
            homePage1.Visible = true;
            underMaintanence1.Visible = false;
            borrowItems1.Visible = false;
            camping1.Visible = false;
        }

  

       

        private void button8_Click(object sender, EventArgs e)
        {
          
            homePage1.Visible = false;
            camping1.Visible = false;
            borrowItems1.Visible = false;
            underMaintanence1.Visible = true;
        }

        private void button1_Click(object sender, EventArgs e)
        {
            Application.Exit();

        }

        private void pictureBox1_Click(object sender, EventArgs e)
        {

        }

        private void camping_Click(object sender, EventArgs e)
        {
            camping1.Visible = true;
            homePage1.Visible = false;
            underMaintanence1.Visible = false;
            borrowItems1.Visible = false;

        }

        private void borrow_Click(object sender, EventArgs e)
        {
            borrowItems1.Visible = true;
            homePage1.Visible = false;
            underMaintanence1.Visible = false;
            camping1.Visible = false;

        }
    }
}
