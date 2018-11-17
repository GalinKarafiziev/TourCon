namespace WindowsFormsApp2
{
    partial class BorrowItems
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

        #region Component Designer generated code

        /// <summary> 
        /// Required method for Designer support - do not modify 
        /// the contents of this method with the code editor.
        /// </summary>
        private void InitializeComponent()
        {
            this.lblbor = new System.Windows.Forms.Label();
            this.borrow = new System.Windows.Forms.Button();
            this.checkBox1 = new System.Windows.Forms.CheckBox();
            this.checkBox2 = new System.Windows.Forms.CheckBox();
            this.checkBox3 = new System.Windows.Forms.CheckBox();
            this.checkBox4 = new System.Windows.Forms.CheckBox();
            this.checkBox5 = new System.Windows.Forms.CheckBox();
            this.SuspendLayout();
            // 
            // lblbor
            // 
            this.lblbor.AutoSize = true;
            this.lblbor.Font = new System.Drawing.Font("Century Gothic", 28.2F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(204)));
            this.lblbor.Location = new System.Drawing.Point(46, 48);
            this.lblbor.Name = "lblbor";
            this.lblbor.Size = new System.Drawing.Size(804, 116);
            this.lblbor.TabIndex = 1;
            this.lblbor.Text = "Here you can choose what item/s\r\n you would like to borrow";
            // 
            // borrow
            // 
            this.borrow.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(58)))), ((int)(((byte)(36)))), ((int)(((byte)(45)))));
            this.borrow.FlatAppearance.BorderSize = 0;
            this.borrow.FlatStyle = System.Windows.Forms.FlatStyle.Flat;
            this.borrow.Font = new System.Drawing.Font("Century Gothic", 12.2F);
            this.borrow.ForeColor = System.Drawing.Color.White;
            this.borrow.Location = new System.Drawing.Point(343, 253);
            this.borrow.Name = "borrow";
            this.borrow.Size = new System.Drawing.Size(217, 71);
            this.borrow.TabIndex = 18;
            this.borrow.Text = "Borrow";
            this.borrow.UseVisualStyleBackColor = false;
            // 
            // checkBox1
            // 
            this.checkBox1.AutoSize = true;
            this.checkBox1.Font = new System.Drawing.Font("Microsoft Sans Serif", 10.8F);
            this.checkBox1.Location = new System.Drawing.Point(98, 213);
            this.checkBox1.Name = "checkBox1";
            this.checkBox1.Size = new System.Drawing.Size(98, 28);
            this.checkBox1.TabIndex = 19;
            this.checkBox1.Text = "Camera";
            this.checkBox1.TextAlign = System.Drawing.ContentAlignment.MiddleCenter;
            this.checkBox1.UseVisualStyleBackColor = true;
            // 
            // checkBox2
            // 
            this.checkBox2.AutoSize = true;
            this.checkBox2.Font = new System.Drawing.Font("Microsoft Sans Serif", 10.8F);
            this.checkBox2.Location = new System.Drawing.Point(98, 253);
            this.checkBox2.Name = "checkBox2";
            this.checkBox2.Size = new System.Drawing.Size(89, 28);
            this.checkBox2.TabIndex = 20;
            this.checkBox2.Text = "Laptop";
            this.checkBox2.UseVisualStyleBackColor = true;
            // 
            // checkBox3
            // 
            this.checkBox3.AutoSize = true;
            this.checkBox3.Font = new System.Drawing.Font("Microsoft Sans Serif", 10.8F);
            this.checkBox3.Location = new System.Drawing.Point(98, 294);
            this.checkBox3.Name = "checkBox3";
            this.checkBox3.Size = new System.Drawing.Size(113, 28);
            this.checkBox3.TabIndex = 21;
            this.checkBox3.Text = "Keyboard";
            this.checkBox3.UseVisualStyleBackColor = true;
            // 
            // checkBox4
            // 
            this.checkBox4.AutoSize = true;
            this.checkBox4.Font = new System.Drawing.Font("Microsoft Sans Serif", 10.8F);
            this.checkBox4.Location = new System.Drawing.Point(98, 335);
            this.checkBox4.Name = "checkBox4";
            this.checkBox4.Size = new System.Drawing.Size(127, 28);
            this.checkBox4.TabIndex = 22;
            this.checkBox4.Text = "Mouse pad";
            this.checkBox4.UseVisualStyleBackColor = true;
            // 
            // checkBox5
            // 
            this.checkBox5.AutoSize = true;
            this.checkBox5.Font = new System.Drawing.Font("Microsoft Sans Serif", 10.8F);
            this.checkBox5.Location = new System.Drawing.Point(98, 371);
            this.checkBox5.Name = "checkBox5";
            this.checkBox5.Size = new System.Drawing.Size(95, 28);
            this.checkBox5.TabIndex = 23;
            this.checkBox5.Text = "Mouse ";
            this.checkBox5.UseVisualStyleBackColor = true;
            // 
            // BorrowItems
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(8F, 16F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.Controls.Add(this.checkBox5);
            this.Controls.Add(this.checkBox4);
            this.Controls.Add(this.checkBox3);
            this.Controls.Add(this.checkBox2);
            this.Controls.Add(this.checkBox1);
            this.Controls.Add(this.borrow);
            this.Controls.Add(this.lblbor);
            this.Name = "BorrowItems";
            this.Size = new System.Drawing.Size(880, 450);
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.Label lblbor;
        private System.Windows.Forms.Button borrow;
        private System.Windows.Forms.CheckBox checkBox1;
        private System.Windows.Forms.CheckBox checkBox2;
        private System.Windows.Forms.CheckBox checkBox3;
        private System.Windows.Forms.CheckBox checkBox4;
        private System.Windows.Forms.CheckBox checkBox5;
    }
}
