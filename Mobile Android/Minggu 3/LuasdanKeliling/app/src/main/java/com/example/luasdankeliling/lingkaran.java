package com.example.luasdankeliling;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.EditText;
import android.widget.TextView;

public class lingkaran extends AppCompatActivity {
    private EditText jari;
    private TextView luas_lingkaran,keliling_lingkaran;
    private double r,hsl_ll,hsl_kl;
    private double p=3.14;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_lingkaran);
        jari=(EditText)findViewById(R.id.jari_lingkaran);
        luas_lingkaran=findViewById(R.id.hasil_ll);
        keliling_lingkaran=findViewById(R.id.hasil_kl);
    }

    public void btn_luas_l(View view) {
        r=Double.parseDouble(jari.getText().toString());
        hsl_ll=p*r*r;
        hsl_kl=p*(2*r);
        luas_lingkaran.setText(Double.toString(hsl_ll));
        keliling_lingkaran.setText(Double.toString(hsl_kl));
    }
    public void back(View view) {
        Intent back2 = new Intent(this,MainActivity.class);
        startActivity(back2);
    }

    public void reset(View view) {
        jari.setText("");
        luas_lingkaran.setText("");
        keliling_lingkaran.setText("");
    }

}