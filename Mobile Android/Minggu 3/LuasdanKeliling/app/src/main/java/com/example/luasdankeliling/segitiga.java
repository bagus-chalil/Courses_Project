package com.example.luasdankeliling;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.EditText;
import android.widget.TextView;

public class segitiga extends AppCompatActivity {
    private EditText alas_ls,tinggi_ls,sisiA_ks,sisiB_ks,sisiC_ks;
    private TextView luas_s,keliling_s;
    private float a1,a2,b1,b2,b3,hsl_ls,hsl_ks;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_segitiga);

        alas_ls=(EditText)findViewById(R.id.alas_sl);
        tinggi_ls=(EditText)findViewById(R.id.tinggi_sl);
        sisiA_ks=(EditText)findViewById(R.id.sisiA);
        sisiB_ks=(EditText)findViewById(R.id.sisiB);
        sisiC_ks=(EditText)findViewById(R.id.sisiC);
        luas_s=findViewById(R.id.hasil_s);
        keliling_s=findViewById(R.id.hasil_k);
    }

    public void btn_luas_s(View view) {
        a1=Float.parseFloat(alas_ls.getText().toString());
        a2=Float.parseFloat(tinggi_ls.getText().toString());
        hsl_ls=(a1*a2)/2;
        luas_s.setText(Float.toString(hsl_ls));
    }

    public void btn_keliling_s(View view) {
        b1=Float.parseFloat(sisiA_ks.getText().toString());
        b2=Float.parseFloat(sisiB_ks.getText().toString());
        b3=Float.parseFloat(sisiC_ks.getText().toString());
        hsl_ks=b1+b2+b3;
        keliling_s.setText(Float.toString(hsl_ks));
    }

    public void back(View view) {
        Intent back2 = new Intent(this,MainActivity.class);
        startActivity(back2);
    }

    public void reset(View view) {

        alas_ls.setText("");
        tinggi_ls.setText("");
        sisiA_ks.setText("");
        sisiB_ks.setText("");
        sisiC_ks.setText("");
        luas_s.setText("");
        keliling_s.setText("");
    }
}