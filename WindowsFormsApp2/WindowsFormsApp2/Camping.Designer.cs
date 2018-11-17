namespace WindowsFormsApp2
{
    partial class Camping
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
            this.chckincamp = new System.Windows.Forms.Button();
            this.chckoutcamp = new System.Windows.Forms.Button();
            this.camplbl = new System.Windows.Forms.Label();
            this.SuspendLayout();
            // 
            // chckincamp
            // 
            this.chckincamp.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(58)))), ((int)(((byte)(36)))), ((int)(((byte)(45)))));
            this.chckincamp.FlatAppearance.BorderSize = 0;
            this.chckincamp.FlatStyle = System.Windows.Forms.FlatStyle.Flat;
            this.chckincamp.Font = new System.Drawing.Font("Century Gothic", 27.2F);
            this.chckincamp.ForeColor = System.Drawing.Color.White;
            this.chckincamp.Location = new System.Drawing.Point(41, 253);
            this.chckincamp.Name = "chckincamp";
            this.chckincamp.Size = new System.Drawing.Size(305, 115);
            this.chckincamp.TabIndex = 19;
            this.chckincamp.Text = "Check In";
            this.chckincamp.UseVisualStyleBackColor = false;
            // 
            // chckoutcamp
            // 
            this.chckoutcamp.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(58)))), ((int)(((byte)(36)))), ((int)(((byte)(45)))));
            this.chckoutcamp.FlatAppearance.BorderSize = 0;
            this.chckoutcamp.FlatStyle = System.Windows.Forms.FlatStyle.Flat;
            this.chckoutcamp.Font = new System.Drawing.Font("Century Gothic", 27.2F);
            this.chckoutcamp.ForeColor = System.Drawing.Color.White;
            this.chckoutcamp.Location = new System.Drawing.Point(457, 253);
            this.chckoutcamp.Name = "chckoutcamp";
            this.chckoutcamp.Size = new System.Drawing.Size(305, 115);
            this.chckoutcamp.TabIndex = 20;
            this.chckoutcamp.Text = "Check out";
            this.chckoutcamp.UseVisualStyleBackColor = false;
            // 
            // camplbl
            // 
            this.camplbl.AutoSize = true;
            this.camplbl.Font = new System.Drawing.Font("Century Gothic", 28.2F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(204)));
            this.camplbl.Location = new System.Drawing.Point(-10, 62);
            this.camplbl.Name = "camplbl";
            this.camplbl.Size = new System.Drawing.Size(814, 116);
            this.camplbl.TabIndex = 21;
            this.camplbl.Text = "You can check in or out of your \r\ncamping spot if you reserved one.";
            // 
            // Camping
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(8F, 16F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.Controls.Add(this.camplbl);
            this.Controls.Add(this.chckoutcamp);
            this.Controls.Add(this.chckincamp);
            this.Name = "Camping";
            this.Size = new System.Drawing.Size(880, 450);
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.Button chckincamp;
        private System.Windows.Forms.Button chckoutcamp;
        private System.Windows.Forms.Label camplbl;
    }
}
