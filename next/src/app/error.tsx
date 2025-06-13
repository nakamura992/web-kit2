"use client";

import { Box, Typography } from "@mui/material";
import { useEffect } from "react";

import BgForm from "@/components/common/BgForm";

export default function Error({
    error,
    reset
}: {
    error: Error & { digest?: string };
    reset: () => void;
}) {
    useEffect(() => {
        // エラーをログに記録するなどの処理
        console.error(error);
    }, [error]);

    return (
        <BgForm>
            <Box
                sx={{
                    padding: 4,
                    maxWidth: "450px",
                    backgroundColor: "#fff"
                }}
            >
                <Typography
                    variant="h5"
                    sx={{
                        textAlign: "center",
                        mb: 2,
                        fontWeight: "bold"
                    }}
                >
                    エラーが発生しました
                </Typography>
                <Typography
                    sx={{
                        textAlign: "center",
                        color: "text.secondary"
                    }}
                >
                    {error.message}
                    <p>時間をおいて再度お試しください</p>
                </Typography>
            </Box>
        </BgForm>
    );
}
