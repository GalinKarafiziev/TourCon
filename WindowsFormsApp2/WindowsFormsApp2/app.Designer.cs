namespace WindowsFormsApp2
{
    partial class Form1
    {
        /// <summary>
        /// Required designer variable.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        /// Clean up any resources being used.
        /// </summary>
        /// <param name="disposing">true if managed resources should be disposed; otherwise, false.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Windows Form Designer generated code

        /// <summary>
        /// Required method for Designer support - do not modify
        /// the contents of this method with the code editor.
        /// </summary>
        private void InitializeComponent()
        {
            System.ComponentModel.ComponentResourceManager resources = new System.ComponentModel.ComponentResourceManager(typeof(Form1));
            this.panel1 = new System.Windows.Forms.Panel();
            this.borrow = new System.Windows.Forms.Button();
            this.camping = new System.Windows.Forms.Button();
            this.button8 = new System.Windows.Forms.Button();
            this.home = new System.Windows.Forms.Button();
            this.button1 = new System.Windows.Forms.Button();
            this.homePage1 = new WindowsFormsApp2.HomePage();
            this.underMaintanence1 = new WindowsFormsApp2.UnderMaintanence();
            this.pictureBox1 = new System.Windows.Forms.PictureBox();
            this.camping1 = new WindowsFormsApp2.Camping();
            this.borrowItems1 = new WindowsFormsApp2.BorrowItems();
            this.panel1.SuspendLayout();
            ((System.ComponentModel.ISupportInitialize)(this.pictureBox1)).BeginInit();
            this.SuspendLayout();
            // 
            // panel1
            // 
            this.panel1.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(58)))), ((int)(((byte)(36)))), ((int)(((byte)(45)))));
            this.panel1.Controls.Add(this.borrow);
            this.panel1.Controls.Add(this.camping);
            this.panel1.Controls.Add(this.button8);
            this.panel1.Controls.Add(this.home);
            this.panel1.Dock = System.Windows.Forms.DockStyle.Left;
            this.panel1.Location = new System.Drawing.Point(0, 0);
            this.panel1.Name = "panel1";
            this.panel1.Size = new System.Drawing.Size(217, 594);
            this.panel1.TabIndex = 13;
            // 
            // borrow
            // 
            this.borrow.FlatAppearance.BorderSize = 0;
            this.borrow.FlatStyle = System.Windows.Forms.FlatStyle.Flat;
            this.borrow.Font = new System.Drawing.Font("Century Gothic", 18F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(204)));
            this.borrow.ForeColor = System.Drawing.SystemColors.ControlLightLight;
            this.borrow.Location = new System.Drawing.Point(3, 342);
            this.borrow.Name = "borrow";
            this.borrow.Size = new System.Drawing.Size(211, 77);
            this.borrow.TabIndex = 19;
            this.borrow.Text = "Borrow Items";
            this.borrow.UseVisualStyleBackColor = true;
            this.borrow.Click += new System.EventHandler(this.borrow_Click);
            // 
            // camping
            // 
            this.camping.FlatAppearance.BorderSize = 0;
            this.camping.FlatStyle = System.Windows.Forms.FlatStyle.Flat;
            this.camping.Font = new System.Drawing.Font("Century Gothic", 18F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(204)));
            this.camping.ForeColor = System.Drawing.SystemColors.ControlLightLight;
            this.camping.Location = new System.Drawing.Point(3, 259);
            this.camping.Name = "camping";
            this.camping.Size = new System.Drawing.Size(211, 77);
            this.camping.TabIndex = 18;
            this.camping.Text = "Camping";
            this.camping.UseVisualStyleBackColor = true;
            this.camping.Click += new System.EventHandler(this.camping_Click);
            // 
            // button8
            // 
            this.button8.FlatAppearance.BorderSize = 0;
            this.button8.FlatStyle = System.Windows.Forms.FlatStyle.Flat;
            this.button8.Font = new System.Drawing.Font("Century Gothic", 18F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(204)));
            this.button8.ForeColor = System.Drawing.SystemColors.ControlLightLight;
            this.button8.Location = new System.Drawing.Point(3, 425);
            this.button8.Name = "button8";
            this.button8.Size = new System.Drawing.Size(214, 74);
            this.button8.TabIndex = 17;
            this.button8.Text = "Shopping ";
            this.button8.UseVisualStyleBackColor = true;
            this.button8.Click += new System.EventHandler(this.button8_Click);
            // 
            // home
            // 
            this.home.FlatAppearance.BorderSize = 0;
            this.home.FlatStyle = System.Windows.Forms.FlatStyle.Flat;
            this.home.Font = new System.Drawing.Font("Century Gothic", 18F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(204)));
            this.home.ForeColor = System.Drawing.SystemColors.ControlLightLight;
            this.home.Location = new System.Drawing.Point(3, 176);
            this.home.Name = "home";
            this.home.Size = new System.Drawing.Size(211, 77);
            this.home.TabIndex = 14;
            this.home.Text = "Home";
            this.home.UseVisualStyleBackColor = true;
            this.home.Click += new System.EventHandler(this.home_Click);
            // 
            // button1
            // 
            this.button1.FlatAppearance.BorderSize = 0;
            this.button1.FlatStyle = System.Windows.Forms.FlatStyle.Flat;
            this.button1.Image = ((System.Drawing.Image)(resources.GetObject("button1.Image")));
            this.button1.Location = new System.Drawing.Point(1017, 12);
            this.button1.Name = "button1";
            this.button1.Size = new System.Drawing.Size(62, 38);
            this.button1.TabIndex = 15;
            this.button1.UseVisualStyleBackColor = true;
            this.button1.Click += new System.EventHandler(this.button1_Click);
            // 
            // homePage1
            // 
            this.homePage1.Location = new System.Drawing.Point(234, 92);
            this.homePage1.Name = "homePage1";
            this.homePage1.Size = new System.Drawing.Size(817, 490);
            this.homePage1.TabIndex = 16;
            // 
            // underMaintanence1
            // 
            this.underMaintanence1.Location = new System.Drawing.Point(319, 108);
            this.underMaintanence1.Name = "underMaintanence1";
            this.underMaintanence1.Size = new System.Drawing.Size(700, 451);
            this.underMaintanence1.TabIndex = 18;
            this.underMaintanence1.Visible = false;
            // 
            // pictureBox1
            // 
            this.pictureBox1.BackColor = System.Drawing.SystemColors.Control;
            this.pictureBox1.Image = ((System.Drawing.Image)(resources.GetObject("pictureBox1.Image")));
            this.pictureBox1.Location = new System.Drawing.Point(234, 12);
            this.pictureBox1.Name = "pictureBox1";
            this.pictureBox1.Size = new System.Drawing.Size(149, 139);
            this.pictureBox1.SizeMode = System.Windows.Forms.PictureBoxSizeMode.StretchImage;
            this.pictureBox1.TabIndex = 19;
            this.pictureBox1.TabStop = false;
            // 
            // camping1
            // 
            this.camping1.Location = new System.Drawing.Point(234, 132);
            this.camping1.Name = "camping1";
            this.camping1.Size = new System.Drawing.Size(880, 450);
            this.camping1.TabIndex = 20;
            this.camping1.Visible = false;
            // 
            // borrowItems1
            // 
            this.borrowItems1.Location = new System.Drawing.Point(223, 132);
            this.borrowItems1.Name = "borrowItems1";
            this.borrowItems1.Size = new System.Drawing.Size(880, 450);
            this.borrowItems1.TabIndex = 21;
            this.borrowItems1.Visible = false;
            // 
            // Form1
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(8F, 16F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(1091, 594);
            this.Controls.Add(this.borrowItems1);
            this.Controls.Add(this.camping1);
            this.Controls.Add(this.pictureBox1);
            this.Controls.Add(this.underMaintanence1);
            this.Controls.Add(this.homePage1);
            this.Controls.Add(this.button1);
            this.Controls.Add(this.panel1);
            this.FormBorderStyle = System.Windows.Forms.FormBorderStyle.None;
            this.Name = "Form1";
            this.Text = "Form1";
            this.panel1.ResumeLayout(false);
            ((System.ComponentModel.ISupportInitialize)(this.pictureBox1)).EndInit();
            this.ResumeLayout(false);

        }

        #endregion
        private System.Windows.Forms.Panel panel1;
        private System.Windows.Forms.Button button8;
        private System.Windows.Forms.Button home;
        private System.Windows.Forms.Button button1;
        private HomePage homePage1;
       
        private UnderMaintanence underMaintanence1;
        private System.Windows.Forms.PictureBox pictureBox1;
        private System.Windows.Forms.Button borrow;
        private System.Windows.Forms.Button camping;
        private Camping camping1;
        private BorrowItems borrowItems1;
    }
}

