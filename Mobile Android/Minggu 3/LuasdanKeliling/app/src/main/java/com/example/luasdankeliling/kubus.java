package com.example.luasdankeliling;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.EditText;
import android.widget.TextView;

public class kubus extends AppCompatActivity {
 private EditText sisi_k;
 private TextView luas_k,keliling_K;
 private float s,hsl_lk,hsl_kk;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_kubus);
        sisi_k=(EditText)findViewById(R.id.sisi_kubus);
        luas_k=findViewById(R.id.hasil_lk);
        keliling_K=findViewById(R.id.hasil_kk);
    }

    public void btn_luas_k(View view) {
        s=Float.parseFloat(sisi_k.getText().toString());
        hsl_lk=6*s*s;
        hsl_kk=12*s;
        luas_k.setText(Float.toString(hsl_lk));
        keliling_K.setText(Float.toString(hsl_kk));
    }

    public void back(View view) {
        Intent back4=new Intent(this,MainActivity.class);
        startActivity(back4);
    }

    public void reset(View view) {
        sisi_k.setText("");
        luas_k.setText("");
        keliling_K.setText("");
    }
}