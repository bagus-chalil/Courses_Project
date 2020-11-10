package com.example.nilai;

import androidx.appcompat.app.AppCompatActivity;

import android.os.Bundle;
import android.text.Editable;
import android.text.TextWatcher;
import android.view.View;
import android.widget.EditText;
import android.widget.TextView;

import org.w3c.dom.Text;

public class MainActivity extends AppCompatActivity {
    private EditText inama,inim,itugas,iuts,iuas;
    private float ntgs,nuts,nuas,nptgs,nputs,npuas,nakhir;
    private TextView hslnama,hslnim,hslptgs,hslputs,hslpuas,nhuruf,hslakhir,hslhuruf,hslpredikat;
    private String pre,huruf;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        inama   =(EditText)findViewById(R.id.isi_nama);
        inim    =(EditText)findViewById(R.id.isi_nim);
        itugas  =(EditText)findViewById(R.id.isi_tgs);
        iuts    =(EditText)findViewById(R.id.isi_uts);
        iuas    =(EditText)findViewById(R.id.isi_uas);
        hslptgs =(TextView) findViewById(R.id.ptgs2);
        hslputs =(TextView) findViewById(R.id.puts2);
        hslpuas =(TextView) findViewById(R.id.puas2);
        hslnama     =(TextView) findViewById(R.id.hnama2);
        hslnim      =(TextView) findViewById(R.id.hnim2);
        hslakhir    =(TextView) findViewById(R.id.pakhir2);
        hslhuruf    =(TextView) findViewById(R.id.phuruf2);
        hslpredikat =(TextView)findViewById(R.id.predikat2);

        itugas.addTextChangedListener(new TextWatcher() {
            @Override
            public void beforeTextChanged(CharSequence s, int start,
                                          int count, int after) {
            }
            @Override
            public void onTextChanged(CharSequence s, int start, int
                    before, int count) {
            }
            @Override
            public void afterTextChanged(Editable s) {
                if(itugas.getText().toString().isEmpty())
                {
                    ntgs=0;
                }else {
                    ntgs =
                            Float.parseFloat(itugas.getText().toString());
                }
                nptgs= (float) (0.3*ntgs);
                hslptgs.setText(Float.toString(nptgs));
            }
        });
        iuts.addTextChangedListener(new TextWatcher() {
            @Override
            public void beforeTextChanged(CharSequence s, int start,
                                          int count, int after) {
            }
            @Override
            public void onTextChanged(CharSequence s, int start, int
                    before, int count) {
            }
            @Override
            public void afterTextChanged(Editable s) {
                if(iuts.getText().toString().isEmpty())
                {
                    nuts=0;
                }else {
                    nuts =
                            Float.parseFloat(iuts.getText().toString());
                }
                nputs= (float) (0.3*nuts);
                hslputs.setText(Float.toString(nputs));
            }
        });
        iuas.addTextChangedListener(new TextWatcher() {
            @Override
            public void beforeTextChanged(CharSequence s, int start,
                                          int count, int after) {
            }
            @Override
            public void onTextChanged(CharSequence s, int start, int
                    before, int count) {
            }
            @Override
            public void afterTextChanged(Editable s) {
                if(iuas.getText().toString().isEmpty())
                {
                    nuas=0;
                }else {
                    nuas =
                            Float.parseFloat(iuas.getText().toString());
                }
                npuas= (float) (0.4*nuas);
                hslpuas.setText(Float.toString(npuas));
            }
        });
    }

    public void submit(View view) {
        String nama=inama.getText().toString();
        hslnama.setText(nama);
        String nim=inim.getText().toString();
        hslnim.setText(nim);
        hitungAkhir();
        hslakhir.setText(Float.toString(nakhir));
        hslhuruf.setText(getHuruf(nakhir));
        hslpredikat.setText(getPredikat(huruf));
    }


    private void hitungAkhir() {
        nakhir=nptgs+nputs+npuas;
    }
    private String getHuruf(float nakhir) {
        if(nakhir>=85) {
            huruf="A";
        }
        else if(nakhir>=80)
            huruf="AB";
        else if(nakhir>=70)
            huruf="B";
        else if(nakhir>=65)
            huruf="BC";
        else if(nakhir>=60)
            huruf="C";
        else if(nakhir>=50)
            huruf="D";
        else
            huruf="E";
        return huruf;
    }

    private String getPredikat(String nhuruf) {
        if ("A".equals(nhuruf)) {
            pre = "Apik";
        } else if ("AB".equals(nhuruf)) {
            pre = "Apik Baik";
        } else if ("B".equals(nhuruf)) {
            pre = "Baik";
        } else if ("BC".equals(nhuruf)) {
            pre = "Cukup Baik";
        } else if ("C".equals(nhuruf)) {
            pre = "Cukup";
        } else if ("D".equals(nhuruf)) {
            pre = "Dablef";
        } else {
            pre = "Elek";
        }
        return pre;
    }


    public void reset(View view) {
        inama.setText("");
        inim.setText("");
        itugas.setText("");
        iuts.setText("");
        iuas.setText("");
        hslnama.setText("");
        hslnim.setText("");
        hslptgs.setText("");
        hslputs.setText("");
        hslpuas.setText("");
        hslakhir.setText("");
        hslpredikat.setText("");
        hslhuruf.setText("");
    }
}