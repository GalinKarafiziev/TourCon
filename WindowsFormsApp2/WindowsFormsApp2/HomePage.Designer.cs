namespace WindowsFormsApp2
{
    partial class HomePage
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
            this.components = new System.ComponentModel.Container();
            this.contextMenuStrip1 = new System.Windows.Forms.ContextMenuStrip(this.components);
            this.label1 = new System.Windows.Forms.Label();
            this.label5 = new System.Windows.Forms.Label();
            this.chckeventin = new System.Windows.Forms.Button();
            this.chckeventout = new System.Windows.Forms.Button();
            this.SuspendLayout();
            // 
            // contextMenuStrip1
            // 
            this.contextMenuStrip1.ImageScalingSize = new System.Drawing.Size(20, 20);
            this.contextMenuStrip1.Name = "contextMenuStrip1";
            this.contextMenuStrip1.Size = new System.Drawing.Size(61, 4);
            // 
            // label1
            // 
            this.label1.AutoSize = true;
            this.label1.Font = new System.Drawing.Font("Century Gothic", 14.2F);
            this.label1.Location = new System.Drawing.Point(24, 150);
            this.label1.Name = "label1";
            this.label1.Size = new System.Drawing.Size(478, 150);
            this.label1.TabIndex = 2;
            this.label1.Text = "With this application you can check-in \r\nand check-out of the event. \r\nYou can bu" +
    "y drinks, food etcetera. \r\nAlso you can borrow items and \r\ncheck-in and out of t" +
    "he camp.";
            // 
            // label5
            // 
            this.label5.AutoSize = true;
            this.label5.Font = new System.Drawing.Font("Century Gothic", 36F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(204)));
            this.label5.Location = new System.Drawing.Point(16, 38);
            this.label5.Name = "label5";
            this.label5.Size = new System.Drawing.Size(333, 74);
            this.label5.TabIndex = 15;
            this.label5.Text = "Welcome!";
            // 
            // chckeventin
            // 
            this.chckeventin.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(58)))), ((int)(((byte)(36)))), ((int)(((byte)(45)))));
            this.chckeventin.FlatAppearance.BorderSize = 0;
            this.chckeventin.FlatStyle = System.Windows.Forms.FlatStyle.Flat;
            this.chckeventin.Font = new System.Drawing.Font("Century Gothic", 12.2F);
            this.chckeventin.ForeColor = System.Drawing.Color.White;
            this.chckeventin.Location = new System.Drawing.Point(596, 150);
            this.chckeventin.Name = "chckeventin";
            this.chckeventin.Size = new System.Drawing.Size(217, 71);
            this.chckeventin.TabIndex = 16;
            this.chckeventin.Text = "Check in the event";
            this.chckeventin.UseVisualStyleBackColor = false;
            // 
            // chckeventout
            // 
            this.chckeventout.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(58)))), ((int)(((byte)(36)))), ((int)(((byte)(45)))));
            this.chckeventout.FlatAppearance.BorderSize = 0;
            this.chckeventout.FlatStyle = System.Windows.Forms.FlatStyle.Flat;
            this.chckeventout.Font = new System.Drawing.Font("Century Gothic", 12.2F);
            this.chckeventout.ForeColor = System.Drawing.Color.White;
            this.chckeventout.Location = new System.Drawing.Point(596, 242);
            this.chckeventout.Name = "chckeventout";
            this.chckeventout.Size = new System.Drawing.Size(217, 71);
            this.chckeventout.TabIndex = 17;
            this.chckeventout.Text = "Check out the event";
            this.chckeventout.UseVisualStyleBackColor = false;
            // 
            // HomePage
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(8F, 16F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.Controls.Add(this.chckeventout);
            this.Controls.Add(this.chckeventin);
            this.Controls.Add(this.label5);
            this.Controls.Add(this.label1);
            this.Name = "HomePage";
            this.Size = new System.Drawing.Size(880, 450);
            this.Load += new System.EventHandler(this.HomePage_Load);
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.ContextMenuStrip contextMenuStrip1;
        private System.Windows.Forms.Label label1;
        private System.Windows.Forms.Label label5;
        private System.Windows.Forms.Button chckeventin;
        private System.Windows.Forms.Button chckeventout;
    }
}
