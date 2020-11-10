package com.example.luasdankeliling;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.EditText;
import android.widget.TextView;

public class persegi extends AppCompatActivity {
private EditText pjg_l,lbr_l,pjg_k,lbr_k;
private float n1,n2,m1,m2,hsl_k,hsl_l;
private TextView luas,keliling;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_persegi);
        pjg_l=(EditText)findViewById(R.id.panjang_pl);
        lbr_l=(EditText)findViewById((R.id.lebar_pl));
        pjg_k=(EditText)findViewById(R.id.panjang_pk);
        lbr_k=(EditText)findViewById((R.id.lebar_pk));
        luas=findViewById(R.id.hasil_l);
        keliling=findViewById((R.id.hasil_k));
    }

    public void btn_luas_P(View view) {

            n1=Float.parseFloat(pjg_l.getText().toString());
            n2=Float.parseFloat(lbr_l.getText().toString());
            hsl_l=n1*n2;
            luas.setText(Float.toString(hsl_l));

    }

    public void btn_keliling(View view) {
        m1=Float.parseFloat(pjg_k.getText().toString());
        m2=Float.parseFloat(lbr_k.getText().toString());
        hsl_k=(m1+m2)*2;
        keliling.setText(Float.toString(hsl_k));
    }

    public void reset(View view) {
        reset();
    }

    private void reset() {
        pjg_l.setText("");
        lbr_l.setText("");
        pjg_k.setText("");
        lbr_k.setText("");
        luas.setText("");
        keliling.setText("");
    }

    public void back(View view) {
        Intent back1 = new Intent(this,MainActivity.class);
        startActivity(back1);
    }
}