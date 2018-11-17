namespace WindowsFormsApp2
{
    partial class UnderMaintanence
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
            System.ComponentModel.ComponentResourceManager resources = new System.ComponentModel.ComponentResourceManager(typeof(UnderMaintanence));
            this.label1 = new System.Windows.Forms.Label();
            this.pictureBox1 = new System.Windows.Forms.PictureBox();
            this.pictureBox2 = new System.Windows.Forms.PictureBox();
            this.drink = new System.Windows.Forms.Button();
            this.food = new System.Windows.Forms.Button();
            ((System.ComponentModel.ISupportInitialize)(this.pictureBox1)).BeginInit();
            ((System.ComponentModel.ISupportInitialize)(this.pictureBox2)).BeginInit();
            this.SuspendLayout();
            // 
            // label1
            // 
            this.label1.AutoSize = true;
            this.label1.Font = new System.Drawing.Font("Century Gothic", 28.2F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(204)));
            this.label1.Location = new System.Drawing.Point(83, 45);
            this.label1.Name = "label1";
            this.label1.Size = new System.Drawing.Size(587, 58);
            this.label1.TabIndex = 0;
            this.label1.Text = "Buy Drinks Or Food Here!";
            // 
            // pictureBox1
            // 
            this.pictureBox1.Image = ((System.Drawing.Image)(resources.GetObject("pictureBox1.Image")));
            this.pictureBox1.Location = new System.Drawing.Point(153, 158);
            this.pictureBox1.Name = "pictureBox1";
            this.pictureBox1.Size = new System.Drawing.Size(190, 168);
            this.pictureBox1.SizeMode = System.Windows.Forms.PictureBoxSizeMode.StretchImage;
            this.pictureBox1.TabIndex = 1;
            this.pictureBox1.TabStop = false;
            // 
            // pictureBox2
            // 
            this.pictureBox2.Image = ((System.Drawing.Image)(resources.GetObject("pictureBox2.Image")));
            this.pictureBox2.Location = new System.Drawing.Point(480, 158);
            this.pictureBox2.Name = "pictureBox2";
            this.pictureBox2.Size = new System.Drawing.Size(190, 168);
            this.pictureBox2.SizeMode = System.Windows.Forms.PictureBoxSizeMode.StretchImage;
            this.pictureBox2.TabIndex = 2;
            this.pictureBox2.TabStop = false;
            this.pictureBox2.Click += new System.EventHandler(this.pictureBox2_Click);
            // 
            // drink
            // 
            this.drink.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(58)))), ((int)(((byte)(36)))), ((int)(((byte)(45)))));
            this.drink.FlatAppearance.BorderSize = 0;
            this.drink.FlatStyle = System.Windows.Forms.FlatStyle.Flat;
            this.drink.Font = new System.Drawing.Font("Century Gothic", 12.2F);
            this.drink.ForeColor = System.Drawing.Color.White;
            this.drink.Location = new System.Drawing.Point(142, 332);
            this.drink.Name = "drink";
            this.drink.Size = new System.Drawing.Size(217, 71);
            this.drink.TabIndex = 17;
            this.drink.Text = "Open drinks menu";
            this.drink.UseVisualStyleBackColor = false;
            // 
            // food
            // 
            this.food.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(58)))), ((int)(((byte)(36)))), ((int)(((byte)(45)))));
            this.food.FlatAppearance.BorderSize = 0;
            this.food.FlatStyle = System.Windows.Forms.FlatStyle.Flat;
            this.food.Font = new System.Drawing.Font("Century Gothic", 12.2F);
            this.food.ForeColor = System.Drawing.Color.White;
            this.food.Location = new System.Drawing.Point(466, 332);
            this.food.Name = "food";
            this.food.Size = new System.Drawing.Size(217, 71);
            this.food.TabIndex = 18;
            this.food.Text = "Open food menu";
            this.food.UseVisualStyleBackColor = false;
            // 
            // UnderMaintanence
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(8F, 16F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.Controls.Add(this.food);
            this.Controls.Add(this.drink);
            this.Controls.Add(this.pictureBox2);
            this.Controls.Add(this.pictureBox1);
            this.Controls.Add(this.label1);
            this.Name = "UnderMaintanence";
            this.Size = new System.Drawing.Size(880, 450);
            this.Load += new System.EventHandler(this.UnderMaintanence_Load);
            ((System.ComponentModel.ISupportInitialize)(this.pictureBox1)).EndInit();
            ((System.ComponentModel.ISupportInitialize)(this.pictureBox2)).EndInit();
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.Label label1;
        private System.Windows.Forms.PictureBox pictureBox1;
        private System.Windows.Forms.PictureBox pictureBox2;
        private System.Windows.Forms.Button drink;
        private System.Windows.Forms.Button food;
    }
}
